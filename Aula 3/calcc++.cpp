#include <iostream>
#include <iomanip>
using namespace std;

int main () {
    // tipagem estatica,  > declaração de variaveis
    int numero1 = 0, numero2 = 0, soma, subtracao, multiplicacao;
    float divisao;

cout << "Digite o primeiro numero: "; cin >> numero1;
cout << "Digite o segundo numero: "; cin >> numero2;

soma = numero1 + numero2;
subtracao = numero1 - numero2;
multiplicacao= numero1 * numero2;
divisao = numero1 / numero2;

cout << fixed << setprecision(2);
cout << "Soma: " << soma << end1;
cout << "Subtracao: " << subtracao << end1;
cout << "Multiplicacao: " << multiplicacao << end1;
cout << "Divisao: " << divisao << end1;

return 0;
}