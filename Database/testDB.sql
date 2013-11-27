INSERT INTO Pims.Login VALUES ('demoDoc','deQcvEr1PRPSM','D');
INSERT INTO Pims.Doctor VALUES ('D005000', 'Otto', 'Matthias', 'Montague', '', 'Underwater basketweaver', 'demoDoc');

INSERT INTO Pims.Login VALUES ('demoMed','deQcvEr1PRPSM','M');
INSERT INTO Pims.MedicalStaff VALUES ('M005000', 'Cedric', 'Corey', 'Harry', '', 'Phlebotomist', 'demoMed');

INSERT INTO Pims.Login VALUES ('demoOff','deQcvEr1PRPSM','O');
INSERT INTO Pims.OfficeStaff VALUES ('O000500', 'Diego', 'Luke', 'Rodriguez', '', 'Secretary', 'demoOff');

INSERT INTO Pims.Login VALUES ('demoVol','deQcvEr1PRPSM','V');
INSERT INTO Pims.Volunteer VALUES ('V005000', 'Patrick', 'Shaun', 'Capulet', '', 'demoVol');

INSERT INTO Pims.Patient VALUES ('00050000', 'Edward', 'Luke', 'Howard', '', '1939-04-16', '7623 Main St.', 'Anytown', 'AL', '12345', '2565559702', '2565556253', '2565550246', 'Joseph Roberts', '2565550639', 'Santiago Ward', '2565559783', 'Jack Kevorkian');

INSERT INTO Pims.Insurance VALUES (50000, '00050000', 'Blue Cross Blue Shield','abc891095561', '20455491');

INSERT INTO Pims.Visit VALUES ('0050000000000010', '00050000', '2009-02-29', '2009-04-03', 'felt sick', 'Huntsville Hospital', 3, 30, 1, 'Any visitors allowed');

INSERT INTO Pims.Billing VALUES (00500000000000000228, '00050000', '0050000000000010', '50.00', '100.00');

INSERT INTO Pims.Charges VALUES (00500000000000000228, 00500000000000000228, 'Brokeded Bones', '11000.95');

INSERT INTO Pims.MedicNotes VALUES (00500000000000000228, '00050000', '0050000000000010', 'Patient is responsive.', 'M005000');

INSERT INTO Pims.Prescription VALUES (00500000000000000228, '00050000', '0050000000000010', 'Administered 1 aspirin at 12:00.', 'D005000');

INSERT INTO Pims.Procedures VALUES (00500000000000000228, '00050000', '0050000000000010', 'Sent patient for an X-ray and 13:00.', 'D005000');

INSERT INTO Pims.DocNotes VALUES (00500000000000000228, '00050000', '0050000000000010', 'Did something doctorly.', 'D005000');
