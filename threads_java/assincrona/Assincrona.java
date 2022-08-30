public class Assincrona {
    public static void main(String[] args) {
        Valores valor = new Valores();
        System.out.println("Iniciando os Threads");

        // criação dos threads
        Thread t1 = new Thread(new Produtor(valor));
        t1.setPriority(10);
        t1.start();

        Thread t2 = new Thread(new Consumidor(valor));
        t2.setPriority(1);
        t2.start();
        
        //Threads antigos
        //new Thread(new Produtor(valor)).start();
        //new Thread(new Consumidor(valor)).start();
    }
}