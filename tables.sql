CREATE TABLE EMPLOYEE (
	EmployeeID int NOT NULL,
	FirstName varchar(255) NOT NULL,
	LastName varchar(255) NOT NULL,
	StreetAddress varchar(255) NOT NULL,
	City varchar(255) NOT NULL,
	Zip varchar(255) NOT NULL,
	ShortState varchar(2) NOT NULL,
	PhoneNumber varchar(14) NOT NULL,
	Password varchar(16) default "temp",
	IsManager boolean DEFAULT false,
	IsActive boolean DEFAULT true,
	PRIMARY KEY (EmployeeID)
);

CREATE TABLE TIME_CLOCKS (
	TimeID int NOT NULL AUTO_INCREMENT,
	EmployeeID int NOT NULL,
	TimeIn datetime DEFAULT CURRENT_TIMESTAMP,
	TimeOut datetime, 
	PRIMARY KEY (TimeID),
	FOREIGN KEY (EmployeeID) REFERENCES EMPLOYEE(EmployeeID)	
);

INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber)
VALUES (20001, "John", "Smith", "1442 Margate Ave", "Tustin", "91231", "CA", "(714) 213-3211");

INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber, IsManager)
VALUES (20003, "Mary", "Baldwin", "3212 Concate Cir", "Whisken", "71222", "AZ", "(551) 112-8912", true);