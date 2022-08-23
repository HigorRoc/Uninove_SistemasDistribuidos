# Criar um loop para saturar os processadores.
# Será mostrado com o escalonador faz o trabalho distribuindo o processamento entre os núcleos

lista = []

for 1 in range(11):
	if (i % 2 ==0): # operação lógica (ULA)
		lista.insert(0, i * i)
	else:
		lista.insert(1, (i * i) - i)

print('Par: ', lista[0])
print('Impar: ', lista[1])