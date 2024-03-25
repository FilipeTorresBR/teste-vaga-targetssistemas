palavra = "Filipe"
invertida = ""
for x in reversed(range(len(palavra))):
    invertida += palavra[x]

print(palavra, invertida)