import sys

h = int(sys.argv[1])
m = int(sys.argv[2])

if h == 12:
    h = 0

if m == 0:
    mf = 0
    hf = 12 - h
else:
    mf = 60 - m
    hf = 12 - h

if hf <= 0:
    hf += 12

print(f"Hora espejo: {hf}:{mf}")