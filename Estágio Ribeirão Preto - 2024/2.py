def fibonacci(n):
    sequencia = [0, 1]
    while sequencia[len(sequencia)-1] <= n:
        proximo = sequencia[-1] + sequencia[-2]
        if proximo <= n:
            sequencia.append(proximo)
        else:
            return sequencia[:n]

n = 55
sequencia_fibonacci = fibonacci(n)
if n in sequencia_fibonacci:
    print(f"O numero {n} faz parte da sequencia fibonacci:", sequencia_fibonacci)
else:
    print(f"O numero {n} não faz parte da sequencia fibonacci:", sequencia_fibonacci)
    


