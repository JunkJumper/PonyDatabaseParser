import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.PrintWriter;
import java.io.UnsupportedEncodingException;
import java.util.List;

import database.DatabaseManager;
import ponies.CharacterManager;
import ponies.Character;


public class Launch {

	public static void createCSV(List<Character> ponies) throws IOException {
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
	
	public static void createSQLschema(DatabaseManager d) throws FileNotFoundException, UnsupportedEncodingException {
		PrintWriter writer = new PrintWriter("createData.sql", "UTF-8");
		
		writer.print(d.writeSQL());
		
		writer.close();
	}
	
	public static void main(String[] args) throws IOException {
		List<Character> ponies = CharacterManager.createCharacters();
		DatabaseManager dbm = new DatabaseManager(ponies);
		
		createCSV(ponies);
		createSQLschema(dbm);
		
		
		
		
	}
}