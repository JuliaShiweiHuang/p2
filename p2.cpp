#include <iostream>
#include <string>
#include <stdio.h>      /* printf, scanf, puts, NULL */
#include <stdlib.h>     /* srand, rand */
#include <time.h>       /* time */

using namespace std;



int main () {
	cout << "how many number of words?" << endl;
	int numOfWords;
	cin >> numOfWords;

	string wordArray[] = {"fox", "loose", "cut", "chamber", "matter", "hunt", "country", "neck", "neck", "muscle"};
	// const string myArray[] = {"sunday", "monday", "tuesday"};

	int wordArrayLength = sizeof(wordArray) / sizeof(wordArray[0]);

	cout << "do you want to add a number? (Enter '1' meaning yes, '0' meaning no)" << endl;
	bool addANumberOrNot;
	cin >> addANumberOrNot;

	cout << "do you want to add a symbol? (Enter '1' meaning yes, '0' meaning no)" << endl;
	bool addASymbolOrNot;
	cin >> addASymbolOrNot;

	int generateRandomNumber; // generate a random integer between (0, sizeOfWordArray);
	for ( int i = 0; i < numOfWords - 1; i++ ) {
		generateRandomNumber = rand() % (numOfWords - 1) + 1;
		cout << wordArray[generateRandomNumber] << "-";
	}

	generateRandomNumber = rand() % (numOfWords - 1) + 1;
	cout << wordArray[generateRandomNumber];

	if ( addANumberOrNot == 1 ) {
		cout << rand() % 100;
	}

	if ( addASymbolOrNot == 1 ) {
		cout << "@";
	}

}

