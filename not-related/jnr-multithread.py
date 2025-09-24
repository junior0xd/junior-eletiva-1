from threading import Thread
from time import sleep
from random import choice

def fatorial(n, delay, thread):
    sum = 1
    for i in range(1, n):
        sum *= i
        print(f"<Thread {thread}> iteração: {i}, soma: {sum}")
        sleep(delay)

def fibonacci(n, delay, thread):
    sum = 1
    aux = 1
    aux2 = 0
    for i in range(n):
        sleep(delay)
        print(print(f"<Thread {thread}> iteração: {i}, soma: {sum}"))
        sum = aux + aux2
        aux2 = aux
        aux = sum

def main ():
    #perguntar quantas threads criar
    delay = 2
    while(True):
        print(f"delay: {delay} segundos")
        print("deseja alterar?")
        opt = input(">>> ")
        if opt == 's' or opt == 'sim' or opt == 'Sim' or opt == 'SIM':
            delay = int(input("digite o valor de delay: "))
            break
        else:
            print("mantido o valor de delay")
            break
    print("Quantas threads deseja iniciar?")
    qtd_threads = int(input(">>> "))
    #criar as threads com função aleatória
    funcs = (fibonacci, fatorial)
    linhas = []
    for i in range(qtd_threads):
        num = int(input(f"<Thread {i}> Digite o número a ser calculado: "))
        linhas.append(Thread(target=choice(funcs), args=(num, delay, i)))

    #iniciar as threads
    for linha in linhas:
        linha.start()
    
    #não sei, só sei que tem que ser assim
    for linha in linhas:
        linha.join()
main()