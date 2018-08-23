class Retangulo:
    def __init__(self, ladoA, ladoB):
        self.ladoA = ladoA
        self.ladoB = ladoB
    def trocaLados(self, ladoA, ladoB):
        self.ladoA = ladoA
        self.ladoB = ladoB
    def retornaLados(self):
        return (self.ladoA, self.ladoB)
    def perimetro(self):
        return 2 * self.ladoA + 2 * self.ladoB
    def area(self):
        return self.ladoA * self.ladoB

ret = Retangulo(2,3)
print "Lados: %i, %i" % ret.retornaLados()
ret.trocaLados(3,4)
print "Lados: %i, %i" % ret.retornaLados()
print "Perimetro: %i Area: %i" % (ret.perimetro(), ret.area())


compl = input("Informe o comprimento do local: ")
largl = input("Informe a largura do local: ")
local = Retangulo(compl, largl)
compp = input("Informe o comprimento do piso: ")
largp = input("Informe a largura do piso: ")
piso = Retangulo(compp, largp)
npisos = local.area() * 1.0 / piso.area()
print "Voce vai precisar de %f pisos" % npisos