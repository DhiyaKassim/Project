#include <iostream>
#include <cstdlib>  // For rand() and srand()
#include <ctime>    // For time()

using namespace std;

int main() {
    int heads = 0;
    int tails = 0;

    // Seed the random number generator
    srand(static_cast<unsigned int>(time(0)));

    for (int i = 0; i < 100; i++) {
        int toss = rand() % 2; // 0 or 1

        if (toss == 0) {
            heads++;
        } else {
            tails++;
        }
    }

    cout << "Coin Toss Simulation (100 times)" << endl;
    cout << "Heads: " << heads << endl;
    cout << "Tails: " << tails << endl;

    return 0;
}
