# Criar um loop para saturar os processadores.
# Será mostrado com o escalonador faz o trabalho distribuindo o processamento entre os núcleos

x_par = 0
x_impar =  0

for 1 in range(11):
	if (i % 2 ==0): # operação lógica (ULA)
		x_par = i * i
	else:
		x_impar = (i * i) - i

print('Par: ', x_par)
print('Impar: ', x_impar)