INSERT INTO Pims.Login VALUES ('demoDoc','deQcvEr1PRPSM','D');
INSERT INTO Pims.Doctor VALUES ('D000000', 'Otto', 'Matthias', 'Montague', '', 'Underwater basketweaver', 'demoDoc');

INSERT INTO Pims.Login VALUES ('demoMed','deQcvEr1PRPSM','M');
INSERT INTO Pims.MedicalStaff VALUES ('M000000', 'Cedric', 'Corey', 'Harry', '', 'Phlebotomist', 'demoMed');

INSERT INTO Pims.Login VALUES ('demoOff','deQcvEr1PRPSM','O');
INSERT INTO Pims.OfficeStaff VALUES ('O000000', 'Diego', 'Luke', 'Rodriguez', '', 'Secretary', 'demoOff');

INSERT INTO Pims.Login VALUES ('demoVol','deQcvEr1PRPSM','V');
INSERT INTO Pims.Volunteer VALUES ('V000007', 'Patrick', 'Shaun', 'Capulet', '', 'demoVol');

INSERT INTO Pims.Patient VALUES ('00000000', 'Edward', 'Luke', 'Howard', '', '1939-04-16', '7623 Main St.', 'Anytown', 'AL', '12345', '2565559702', '2565556253', '2565550246', 'Joseph Roberts', '2565550639', 'Santiago Ward', '2565559783', 'Jack Kevorkian');

INSERT INTO Pims.Insurance VALUES (0, '00000000', 'Blue Cross Blue Shield','abc891095561', '20455491');

INSERT INTO Pims.Visit VALUES ('0000000000000000', '00000000', '2009-02-29', '2009-04-03', 'felt sick', 'Huntsville Hospital', 3, 30, 1, 'Any visitors allowed');

INSERT INTO Pims.Billing VALUES (00000000000000000000, '00000000', '0000000000000000', '50.00', '100.00');

INSERT INTO Pims.Charges VALUES ('00000000000000000000', 00000000000000000001, 'Brokeded Bones', '11000.95');

INSERT INTO Pims.MedicNotes VALUES (00000000000000000000, '00000000', '0000000000000000', 'Patient is responsive.', 'M000000');

INSERT INTO Pims.Prescription VALUES (00000000000000000000, '00000000', '0000000000000000', 'Administered 1 aspirin at 12:00.', 'D000000');

INSERT INTO Pims.Procedures VALUES (00000000000000000000, '00000000', '0000000000000000', 'Sent patient for an X-ray and 13:00.', 'D000000');

INSERT INTO Pims.DocNotes VALUES (00000000000000000001, '00000000', '0000000000000000', 'Did something doctorly.', 'D000000');
