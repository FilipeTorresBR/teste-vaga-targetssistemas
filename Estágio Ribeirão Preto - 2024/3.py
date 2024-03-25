#letra A
a = []
b = []
c = []
d = []
for x in range(1, 10, 2):
    a.append(x)
print("Questão A: ", a)
# São numeros impares, proximo elemento é o 9

#letra B
for x in range(1, 8):
    b.append(2**x)
print("Questão B: ", b)
# São resultados de expoentes de base dois, o proximo elemento é o 128
    
#letra C
for x in range(1, 8):
    c.append(x * x)
print("Questão C: ", c)
# São quadrados perfeitos, o proximo elemento é o 49
    
#letra D
for x in range(2, 11, 2):
    d.append(x*x)
print("Questão D: ", d)

# São quadrados perfeitos de numeros pares, o proximo elemento é o 100

#letra E
n = 13
sequencia = [0, 1]
while sequencia[len(sequencia)-1] <= n:
    proximo = sequencia[-1] + sequencia[-2]
    if proximo <= n:
        sequencia.append(proximo)
    else:
        print("Questão E: ", sequencia[:n])
        break

# É a sequencia fibonacci, o proximo elemento é o 13

#letra F
#Esta sequencia trata dos numeros que começam com a letra D, logo a proxima seria 200



