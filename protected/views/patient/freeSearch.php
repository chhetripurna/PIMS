<body onload="document.search_form.query.focus()">
 <?php 
  /*To import the client script*/
  $baseUrl = Yii::app()->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile($baseUrl.'/js/jquery.js');
  ?>
 
  <div class="admin">
 
  <script type="text/javascript">
 
 
$(document).ready(function() {
 
 
$("#faq_search_input").keyup(function()
 
{
var faq_search_input = $(this).val();
var dataString = 'keyword='+ faq_search_input;

var current_url = $('#current_url').val(); 
 
 
/*This is the minimum size of search string. Search will be only done when at-least 3 characters are provided in input*/
if(faq_search_input.length>3)
 
{
$.ajax({
type: "GET",
url: current_url+"/SearchEngine",
data: dataString,
/*Uncomment this if you want to send the additional data*/
//data: dataString+"&refid="+ref_id+"&custid="+cust_id,
beforeSend:  function() {
 
$('input#faq_search_input').addClass('loading');
 
},
success: function(server_response)
{
 
$('#searchresultdata').html(server_response).show();
$('span#faq_category_title').html(faq_search_input);
 
if ($('input#faq_search_input').hasClass("loading")) {
 $("input#faq_search_input").removeClass("loading");
        } 
 
}
});
}return false;
});
});
 
</script>
 
<?php
 
/*You need to change the URL as per your requirements, else this will show error page*/
$model_name="Patient";
$current_url=$baseUrl."/".$model_name;
 
/*To Send the additional data if needed*/

//echo "Search   :".$current_url;
?>
 
        <input type="hidden" id="current_url" value="<?php echo $current_url;?>"/> 
        <!-- if YOU WANT TO SEND ADDITIONAL HIDDEN VARIABLES--> 
                Enter Item Name Part Number or barcode<br><br>
                <!-- The Searchbox Starts Here  -->
                <form  name="search_form">
                 <input  name="query" type="text" id="faq_search_input" style="background-color: #FFFFFF" />
                </form>
                <!-- The Searchbox Ends  Here  -->
        <div id="searchresultdata" class="faq-articles"> </div>
     </div>
