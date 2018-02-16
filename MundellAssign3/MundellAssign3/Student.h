#pragma once
#include <string>
template <class T>
class Student {

public:
	Student(int newId =0, int newGpa = 3.5, string newName = "Boy Girl") {
		ID = newId;
		GPA = newGpa;
		Name = newName;
	}
	//Is this redundant
	Student(int newId, int newGpa, string newName) {
		ID = newId;
		GPA = newGpa;
		Name = newName;
	}
	int getID() {
		return ID;
	}
	int getGPA() {
		return GPA;
	}
	string getName() {
		return Name;
	}
	void setID(int newId) {
		ID = newId;
	}
	void setGPA(int newGpa) {
		GPA = newGpa
	}
	void setName(string newName	) {
		Name = newName;
	}

private:

	int ID;
	string Name;
	int GPA;



};
