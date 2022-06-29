// rig: Dell PowerEdge T110-II (3.1 GHz/core x4) / php8.1-fpm
#include <iostream>
#include <iomanip> 

using namespace std;

int main() {
    long long int num, sum;
    clock_t start, end;

    start = clock();

    sum = 0;    

    for (int i = 0; i < 900000000; ++i) {        
        sum += i;
    }

    cout << "Reached: " << sum << endl; // Reached: 404999999550000000

    end = clock();

    double time_taken = double(end - start) / double(CLOCKS_PER_SEC);
    cout << "Time taken by program is : " << fixed 
         << time_taken << setprecision(5);
    cout << " sec " << endl; // Time taken by program is : 2.174308 sec
    return 0;
    
}