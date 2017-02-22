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

CREATE TABLE HUMIDITY (
    temperature float NOT NULL,
    humidity float NOT NULL,
    longitude float NOT NULL,
    latitude float NOT NULL,
    time_stamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(time_stamp)
);

INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber)
VALUES (20001, "John", "Smith", "1442 Margate Ave", "Tustin", "91231", "CA", "(714) 213-3211");

INSERT INTO EMPLOYEE (EmployeeID, FirstName, LastName, StreetAddress, City, Zip, ShortState, PhoneNumber, IsManager)
VALUES (20003, "Mary", "Baldwin", "3212 Concate Cir", "Whisken", "71222", "AZ", "(551) 112-8912", true);

INSERT INTO HUMIDITY (temperature, humidity, longitude, latitude, time_stamp)
VALUES (57.9, 81, 33.7456, 117.8678, CURRENT_TIMESTAMP);