public class Sincrona {
    public static void main(String[] args) {
        Valores valor = new Valores();
        System.out.println("Processadores: " + Runtime.getRuntime().availableProcessors());
        System.out.println("Iniciando os Threads");
        System.out.println("");

        // criação dos threads
        new Thread(new Produtor(valor)).start();
        new Thread(new Consumidor(valor)).start();
    }
}