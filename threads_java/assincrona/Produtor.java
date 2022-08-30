public class Produtor implements java.lang.Runnable {
    Valores valor;

    public Produtor(Valores valor) {
        this.valor = valor;
    }

    @Override
    public void run() {
        int tempo;
        for (int i = 0; i < 11; i++) {
            tempo = (int) (Math.random() * 3000);
            valor.guardar(i);
            System.out.println("Produtor guardando o valor: \t" + i);

            try {
                Thread.sleep(tempo);
            } catch (InterruptedException e) {
            }
        }
    }
}
