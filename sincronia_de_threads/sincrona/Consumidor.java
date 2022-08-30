public class Consumidor implements java.lang.Runnable {
    Valores valor;

    public Consumidor(Valores valor) {
        this.valor = valor;
    }

    @Override
    public void run() {
        int tempo;
        for (int i = 0; i < 11; i++) {
            tempo = (int) (Math.random() * 3000);
            System.out
                    .println("Lendo o valor....: \t" + valor.exibir() + "\t" + tempo
                            + "/ms\t\t" + Thread.currentThread().getName());

            try {
                Thread.sleep(tempo);
            } catch (InterruptedException e) {
                System.out.println("Run-Consumidor: " + e.getMessage());
            }
        }
    }
}
