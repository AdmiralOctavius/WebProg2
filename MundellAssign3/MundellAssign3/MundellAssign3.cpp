// MundellAssign3.cpp : Defines the entry point for the console application.
//
#include <iostream>
#include <string>
#include "Student.h"


using namespace std;

int main()
{


	Student<int> newStudent(5,4,"Dad");

	cout << newStudent.getID() << endl;
    return 0;
}

