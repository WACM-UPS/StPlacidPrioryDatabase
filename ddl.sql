.mode columns
.headers on
.nullvalue NULL
PRAGMA foreign_keys = ON;

create table ContactInfo(
  personID INTEGER PRIMARY KEY,
  fName TEXT NOT NULL,
  lName TEXT NOT NULL,
  cellNum INTEGER NOT NULL CHECK(length(cellNum) <= 10),
  homeNum INTEGER NOT NULL CHECK(length(homeNum) <= 10),
  email TEXT NOT NULL UNIQUE,
  street TEXT NOT NULL,
  apartment TEXT NOT NULL,
  city TEXT NOT NULL,
  state TEXT NOT NULL CHECK(length(state) <= 2),
  zip INTEGER NOT NULL CHECK(zip < 100000)
);

create table RegistrationInfo(
  programID INTEGER PRIMARY KEY,
  personID INTEGER NOT NULL UNIQUE,
  numPeople INTEGER NOT NULL CHECK(length(numPeople) <= 50),
  startDay TEXT NOT NULL,
  startTime TEXT NOT NULL,
  endDay TEXT NOT NULL,
  endTime TEXT NOT NULL,

  FOREIGN KEY(personID) REFERENCES ContactInfo(personID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

create table MeetingRoomInfo(
  programID INTEGER NOT NULL UNIQUE,
  meetRoomID INTEGER NOT NULL CHECK(meetRoomID <= 3),
  dateReserve TEXT NOT NULL,
  startTime TEXT NOT NULL,
  endTime TEXT NOT NULL,
  equip INTEGER NOT NULL CHECK(equip <= 1),

  PRIMARY KEY(programID, meetRoomID)
  FOREIGN KEY(programID) REFERENCES RegistrationInfo(programID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
  FOREIGN KEY(meetRoomID) REFERENCES MeetingRooms(meetRoomID)
    ON UPDATE CASCADE
    ON DELETE CASCADE

);

create table MeetingRooms(
  meetRoomID INTEGER PRIMARY KEY CHECK(meetRoomID <= 3),
  meetRoomName TEXT NOT NULL UNIQUE
);

create table EquipmentReserve(
  meetRoomID INTEGER NOT NULL UNIQUE CHECK(meetRoomID <= 3),
  programID INTEGER NOT NULL UNIQUE,
  spiritDirect INTEGER NOT NULL CHECK(spiritDirect <= 1),
  mediaEquip INTEGER NOT NULL CHECK(mediaEquip <= 1),

  PRIMARY KEY(meetRoomID, programID)
  FOREIGN KEY(programID) REFERENCES RegistrationInfo(programID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
  FOREIGN KEY(meetRoomID) REFERENCES MeetingRooms(meetRoomID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);


create table MealInfo(
  programID INTEGER NOT NULL UNIQUE,
  singleDate TEXT NOT NULL,
  mealNum INTEGER NOT NULL CHECK(mealNum <= 3),

  PRIMARY KEY(programID, singleDate)
  FOREIGN KEY(programID) REFERENCES RegistrationInfo(programID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

create table RoomReserve(
  programID INTEGER NOT NULL UNIQUE,
  bedroomID INTEGER NOT NULL UNIQUE,
  numPeople INTEGER NOT NULL CHECK(numPeople <= 2),

  PRIMARY KEY(programID, bedroomID)
  FOREIGN KEY(programID) REFERENCES RegistrationInfo(programID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
  FOREIGN KEY(bedroomID) REFERENCES BedroomInfo(bedroomID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

create table BedroomInfo(
  bedroomID INTEGER PRIMARY KEY,
  roomName TEXT NOT NULL UNIQUE,
  maxPeople INTEGER NOT NULL CHECK(maxPeople <=2)
);
