public class Valores {
    int valor;

    // flag
    private boolean bloqueado;

    public Valores() { // construtor
        bloqueado = false;
    }

    // forçando a sincronização
    public synchronized void guardar(int valores) {
        while (bloqueado) {
            try {
                // chamamos o escalonador (Psiu!!!)
                wait(); // aguardar um pouquinho
            } catch (InterruptedException e) {
                System.out.println("ERRO guardando... " + e.getMessage());
            }
        }
        this.valor = valores;
        bloqueado = true;
        // avisamos o escalonador que "algo" mudou
        notify();
    }

    public synchronized int exibir() {
        while (!bloqueado) {
            try {
                wait();
            } catch (InterruptedException e) {
                System.out.println("ERRO Lendo... :" + e.getMessage());
            }
        }
        bloqueado = false;
        notify();
        return this.valor;
    }

}