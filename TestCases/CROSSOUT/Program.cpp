#include<iostream>
#include<fstream>
using namespace std;
const int N = 90;
long long fib[N];
int smallest_summand(long long num);
int main()
{
    int i,j;
    ofstream myfile,input,output;
    myfile.open("Fib.txt");
    input.open("input.txt");
    output.open("output.txt");
    fib[0] = 0;
    fib[1] = 1;
    myfile<<fib[0]<<endl<<fib[1];
    for(i=2;i<N;i++){
        fib[i] = fib[i-1] + fib[i-2];
        myfile<<endl<<fib[i];
    }
    int count = 1;
    long long num = 20;
    while(count<=100)
    {
        int sum = smallest_summand(num);
        if(sum>=3){
                count = count + 1;
                input<<num<<endl;
                output<<sum<<endl;
        }
        num = num + 100;    
    }    
}    
        
int smallest_summand(long long num)
{
    int j,diff;
    while(1){
        int j = 0;
            while(fib[j]<=num)
                    j++;
            j = j - 1;
            diff = num - fib[j];
            if(diff==0)
                    return fib[j];
            num = diff;
    }
}       
