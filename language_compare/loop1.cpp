// rig: Dell PowerEdge T110-II (3.1 GHz/core x4) / php8.1-fpm
#include <iostream>
#include <iomanip> 

using namespace std;

int main() {
    long long int num, sum;
    clock_t start, end;

    start = clock();
    sum = 0;    

    for (int i = 0; i < 1000000000; ++i) {        
        sum += i;
    }

    cout << "Count reached: " << sum << endl;
    end = clock();

    double time_taken = double(end - start) / double(CLOCKS_PER_SEC);
    cout << "Time taken by program in C++ is: " << fixed 
         << time_taken << setprecision(5);
    cout << " sec " << endl;
    return 0;
}

// rig: Dell PowerEdge T110-II (3.1 GHz/core x4 - 4GB Ram) / php8.1-fpm
// Time taken by program in C++ is: 2.169375 sec