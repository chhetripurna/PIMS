<?php 

/**
 * SearchForm Class.
 * SearchForm is the data structure for keeping
 * search form data. It is used by the 'search' action of 'SiteController'.
 */

class SearchForm extends CFormModel
{
	public $input;
	public $search;
	public $dataReader;

	private $results;


	public function rules()
	{
		return array(
			array('input','required'),
			array('input','search'),
		);
	}

	public function search()
	{
	
		$names = explode(' ', $this->input);
		
		Yii::trace(count($names), 'info');
		
		if (count($names) === 1 ){
		
			$names = str_split($names[0]);
			if ($names[count($names)-1] === '.')
			{
				$names = implode($names);
				$names = rtrim($names, '.');
				
				$command=Yii::app()->db->createCommand()
				->select('*')
				->from('Patient')
				->orWhere('firstName like :input', array(':input'=>"%{$names}%"))
				->orWhere('lastName like :input', array(':input'=>"%{$names}%"))
				->order('lastName ASC, firstName ASC');
				
			} else {
				$names = implode($names);
				$command=Yii::app()->db->createCommand()
				->select('*')
				->from('Patient')
				->orWhere('firstName="'.$names.'"')
				->orWhere('lastName="'.$names.'"')
				->order('lastName ASC, firstName ASC');
			}
			
			Yii::trace($names, 'info');
		
		} else {
			$command=Yii::app()->db->createCommand()
				->select('*')
				->from('Patient')
				->orWhere('firstName like :firstName', array(':firstName'=>"%{$names[0]}%"))
				->orWhere('lastName like :lastName', array(':lastName'=>"%{$names[1]}%"))
				->order('firstName, lastName');
		}
		
		if(!$this->hasErrors())
		{
		
			$this->results=$command->query();
						
		} else {
			return false;
		}	
		
		if($this->results->count() === 0)
		{
			return false;
		}
		return $this->results;
	}
}

?>
