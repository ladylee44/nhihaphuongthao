		-- hita09

-- User
-- Username
-- Password
-- Lastlogin
-- DeleteFlag
-- Email
CREATE TABLE IF NOT EXISTS User (
	Username	varchar(255) NOT NULL UNIQUE,	
	Password	varchar(255) NOT NULL,
	Lastlogin	datetime,
	DeleteFlag 	int,
	Email    varchar(255),
	PRIMARY KEY (Username)	
);

INSERT INTO User
VALUES('admin','1235', '1996-01-01 00:00:00','0', 'admin@admin.com');
INSERT INTO User
VALUES('user','1235', '1997-01-01 00:00:00','0', 'user@admin.com');
INSERT INTO User
VALUES('guest','1235', '1998-01-01 00:00:00','0', 'guest@admin.com');

-- UserProfile
-- Username
-- Avatar
-- Fullname
-- DoB
-- Gender
-- Address
-- Phone
CREATE TABLE IF NOT EXISTS UserProfile (
	Username varchar(255) NOT NULL UNIQUE,
	Avatar varchar(255),
	Fullname varchar(255),
	DoB			date,
	Gender	char(1),
	Address		varchar(255),
	Phone		varchar(15) ,
	FOREIGN KEY (Username) REFERENCES User(Username)
	
);
INSERT INTO UserProfile
VALUES('admin','http://3.bp.blogspot.com/-3anV_ZoO6C0/VHvNSKXZp1I/AAAAAAAAQmg/_FjnIc2Akp0/s1600/Avatar-Facebook-an-danh-trang-2.jpg', 'John D','1993-4-4', 'M', 'Hanoi', '01636789404');
INSERT INTO UserProfile
VALUES('user ','http://3.bp.blogspot.com/-3anV_ZoO6C0/VHvNSKXZp1I/AAAAAAAAQmg/_FjnIc2Akp0/s1600/Avatar-Facebook-an-danh-trang-2.jpg', 'John D','1993-4-4', 'M', 'Hanoi', '01636789404');
INSERT INTO UserProfile
VALUES('guest','http://3.bp.blogspot.com/-3anV_ZoO6C0/VHvNSKXZp1I/AAAAAAAAQmg/_FjnIc2Akp0/s1600/Avatar-Facebook-an-danh-trang-2.jpg', 'John D','1993-4-4', 'M', 'Hanoi', '01636789404');


-- Photo
-- PhotoID
-- AlbumID
-- Username
-- PhotoURL
CREATE TABLE IF NOT EXISTS Photo (
	PhotoID int AUTO_INCREMENT,
	AlbumID int,
	Username	varchar(255) NOT NULL UNIQUE,	
	PhotoURL    varchar(255),
	PRIMARY KEY (PhotoID),
	FOREIGN KEY (Username) REFERENCES User(Username)
);

INSERT INTO Photo
VALUES('','1', 'user','https://orig00.deviantart.net/ea42/f/2011/249/e/0/facebook_avatar___hawk_eye_mih_by_richardknight-d492xnx.png');
INSERT INTO Photo
VALUES('','2', 'admin','http://vungtauvl.blogspot.com/2014/09/anh-ai-dien-facebook-oc-nhat-avatar-fb.html');
INSERT INTO Photo
VALUES('','3', 'guest ','http://3.bp.blogspot.com/-SMNLs_5XfVo/VHvNUx8dWZI/AAAAAAAAQnY/NWdkO4JPE_M/s1600/Avatar-Facebook-an-danh-trang-4.jpg');

		