CREATE TABLE Student (
	StudentId INT,
	StudentName CHAR(50) NOT NULL DEFAULT '',
	Major CHAR(50) NOT NULL DEFAULT '',
	PRIMARY KEY (StudentId)
);
CREATE TABLE Course (
	DeptCode CHAR(50) NOT NULL DEFAULT '',
	CourseNum INT NOT NULL DEFAULT 0,
	Title CHAR(50) NOT NULL DEFAULT '',
	CreditHours INT NOT NULL DEFAULT 0
);
CREATE TABLE Enrollment (
	StudentId INT,
	DeptCode CHAR(50) NOT NULL DEFAULT '',
	CourseNum INT NOT NULL DEFAULT 0,
	PRIMARY KEY (StudentId)
);

INSERT INTO Student (StudentId, StudentName, Major)
VALUES (010854980, 'Rachel Culbertson', 'Computer Science');
INSERT INTO Student (StudentId, StudentName, Major)
VALUES (019283456, 'John Doe', 'Business');
INSERT INTO Student (StudentId, StudentName, Major)
VALUES (039245673, 'Jane Smith', 'Communication');

INSERT INTO Course (DeptCode, CourseNum, Title, CreditHours)
VALUES ('CSCE', 4013, 'Cloud Computing', 3);
INSERT INTO Course (DeptCode, CourseNum, Title, CreditHours)
VALUES ('PHYS', 2054, 'University Physics I', 4);
INSERT INTO Course (DeptCode, CourseNum, Title, CreditHours)
VALUES ('COMM', 1313, 'Public Speaking', 3);

INSERT INTO Enrollment (StudentId, DeptCode, CourseNum)
VALUES (019283456, 'PHYS', 2054);
INSERT INTO Enrollment (StudentId, DeptCode, CourseNum)
VALUES (010854980, 'CSCE', 4013);
INSERT INTO Enrollment (StudentId, DeptCode, CourseNum)
VALUES (039245673, 'COMM', 1313);