import java.io.IOException;
import java.io.PrintWriter;
import java.util.List;

import ponies.CharacterManager;
import ponies.Character;


public class Launch {

	public static void createCSV() throws IOException {
		List<Character> ponies = CharacterManager.createCharacters();
		
		PrintWriter writer = new PrintWriter("ponies.csv", "UTF-8");
		int total = ponies.size();
		int i = 0;
		for(Character c : ponies) {
			writer.write(c.toString()+"\n");
			i++;
			System.out.println("Pony " + i + " parsed. " + (total-i) + " ponies left to parse.");
		}
		
		writer.close();
	}
	
	public static void main(String[] args) throws IOException {

		//createCSV();
		
		
		
	}
}