import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;

public class Solucao {

    // Restrições: hoje, chovendo, está.
    // Entrada: Hoje está chovendo muito.
    // Saída: **** **** ******** muito.

    public static void main(String[] args) throws IOException {

        // Lista de palabras restritas
        ArrayList<String> palavras = new ArrayList<>();
        palavras.add("banana");
        palavras.add("laranja");
        palavras.add("mexerica");
        palavras.add("compr");

        String frase = "Fui na feira e comprei laranja, limão e mexerica.";
        gravaDados(frase);

        String retorno = "";

        // Número de elementos na lista
        int qtdLista = palavras.size();

        // Percorrendo a Lista de restrições e aplicando na frase
        do{
            // Percorrer a frase
            for (String palavra : palavras){
                if(frase.contains(palavra)){
                    retorno = frase.replace(palavra, mascara(palavra));
                }
            }
            frase = retorno;
            qtdLista--;

        }while(qtdLista > 0);
        System.out.println("\nAs palavras sensuradas foram substituídas por asteriscos.\n" + retorno + "\n");
    }

    public static String mascara(String palavra){

        String mascara = "";
        for (int i=0; i<palavra.length(); i++){
            mascara += "*";
        }
        return mascara;
    }

    /**
     * 
     * @param frase
     * @throws IOException
     */
    public static void gravaDados(String frase) throws IOException {
        // Nome do arquivo
        File arquivo = new File("log_chat.txt");

        // cria um arquivo (vazio)
        if (!arquivo.exists()) {
            arquivo.createNewFile();
        }
        
        // escreve no arquivo
        FileWriter fw = new FileWriter(arquivo, true);
        BufferedWriter bw = new BufferedWriter(fw);
        bw.write(frase);
        bw.newLine();
        bw.close();
        fw.close();
    }
}
