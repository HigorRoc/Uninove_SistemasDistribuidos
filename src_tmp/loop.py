# Criar um loop para saturar os processadores.
# Será mostrado com o escalonador faz o trabalho distribuindo o processamento entre os núcleos

for 1 in range(11):
	if (i % 2 ==0): # operação lógica (ULA)
		print('Par: ', i * i)
	else:
		print('Impar: ', (i * i) - i)

#print('Par: ', i)
#print('Impar: ', i)