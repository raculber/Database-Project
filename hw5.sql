CREATE TABLE Student(
  StudentId INT,
  StudentName CHAR(50) NOT NULL DEFAULT '',
  Major CHAR(50) NOT NULL DEFAULT '',
  PRIMARY KEY (StudentId)
);

CREATE TABLE Course(
  DeptCode INT,
  CourseNum INT NOT NULL DEFAULT 0,
  Title CHAR(50) NOT NULL DEFAULT '',
  CreditHours INT NOT NULL DEFAULT 0,
);

CREATE TABLE Enrollment(
  StudentId INT,
  DeptCode INT NOT NULL DEFAULT 0,
  CourseNum INT NOT NULL DEFAULT 0,
  PRIMARY KEY (StudentId)
);
