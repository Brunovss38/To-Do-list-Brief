#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        ID_User    Int  Auto_increment  NOT NULL ,
        First_Name Varchar (50) NOT NULL ,
        Last_Name  Varchar (50) NOT NULL ,
        Password   Varchar (255) NOT NULL ,
        Email      Varchar (80) NOT NULL
	,CONSTRAINT User_AK UNIQUE (Email)
	,CONSTRAINT User_PK PRIMARY KEY (ID_User)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Priority 
#------------------------------------------------------------

CREATE TABLE Priority(
        ID_Priority Int  Auto_increment  NOT NULL ,
        Name        Varchar (80) NOT NULL
	,CONSTRAINT Priority_PK PRIMARY KEY (ID_Priority)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Category
#------------------------------------------------------------

CREATE TABLE Category(
        ID_Category Int  Auto_increment  NOT NULL ,
        Name        Varchar (80) NOT NULL
	,CONSTRAINT Category_PK PRIMARY KEY (ID_Category)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Task
#------------------------------------------------------------

CREATE TABLE Task(
        ID_Task     Int  Auto_increment  NOT NULL ,
        Name        Varchar (255) NOT NULL ,
        Description Varchar (255) NOT NULL ,
        Date        Date NOT NULL ,
        ID_User     Int NOT NULL ,
        ID_Priority Int NOT NULL
	,CONSTRAINT Task_PK PRIMARY KEY (ID_Task)

	,CONSTRAINT Task_User_FK FOREIGN KEY (ID_User) REFERENCES User(ID_User)
	,CONSTRAINT Task_Priority0_FK FOREIGN KEY (ID_Priority) REFERENCES Priority(ID_Priority)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Has
#------------------------------------------------------------

CREATE TABLE Has(
        ID_Task     Int NOT NULL ,
        ID_Category Int NOT NULL
	,CONSTRAINT Has_PK PRIMARY KEY (ID_Task,ID_Category)

	,CONSTRAINT Has_Task_FK FOREIGN KEY (ID_Task) REFERENCES Task(ID_Task)
	,CONSTRAINT Has_Category0_FK FOREIGN KEY (ID_Category) REFERENCES Category(ID_Category)
)ENGINE=InnoDB;

