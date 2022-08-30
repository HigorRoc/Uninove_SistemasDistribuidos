// Programa para trabalharmos com Threads

class ClasseRunnable implements java.lang.Runnable{
	private int contador; //contagem dentro do thread
	private final int contadorTotal; //devolucao final

	// Construtor do Thread
	public ClasseRunnable(int contadorTotal){
		this.contadorTotal = contadorTotal;
		this.contador = 0;
	}

	@Override // Implementação (sobrescrita) de método
	public void run(){
		while (contador <= contadorTotal){
			System.out.println(Thread.currentThread().getName() + 
				"Prioridade: " + Thread.currentThread().getPriority());

			System.out.println(Thread.currentThread().getName() + 
				"Contador: " + contador);
			
			contador++;

			// Pausa no processamento (controle do escalonador)
			try {
				System.out.println(Thread.currentThread().getName() + "Dormindo...");
				Thread.sleep(2000); // aguarda 2 segundos
			} catch (Exception e) {
				e.printStackTrace(System.err); // Devolve o erro ocorrido
			}
		}
		System.out.println("\nThread finalizada com sucesso!\n");
	}
}

public class MyRunnable{
	public static void main(String[] args) {
		//Descobrindo o número de "cores" de processadores (inclui Threads)
		//System.out.println("\nProcessadores: " + Runtime.getRuntime().availableProcessors() + "\n");

		// Criação dos métodos Runnable com o parâmetro do contador
		ClasseRunnable r1 = new ClasseRunnable(1);
		ClasseRunnable r2 = new ClasseRunnable(5);
		ClasseRunnable r3 = new ClasseRunnable(10);

		// Criação dos Threads com prioridades (MIN[1], NORMAL[5] e MAX[10] - PRIORITY )
		Thread t1 = new Thread(r1);
		t1.setName("R1 - ");
		t1.setPriority(Thread.MIN_PRIORITY);
		t1.start();

		Thread t2 = new Thread(r2);
		t2.setName("R2 - ");
		t2.setPriority(Thread.MIN_PRIORITY);
		t2.start();

		Thread t3 = new Thread(r3);
		t3.setName("R3 - ");
		t3.setPriority(Thread.MAX_PRIORITY);
		t3.start();
	}
}