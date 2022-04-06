package database;

import java.util.ArrayList;
import java.util.List;

import ponies.Character;

public class DatabaseManager {
	private List<Character> ponies;
	
	private List<String> kinds;
	private List<String> places;
	
	private List<String> characterNameList;
	
	public DatabaseManager(List<Character> p) {
		this.ponies = p;
		
		this.kinds = new ArrayList<>();
		this.places = new ArrayList<>();
		
		this.characterNameList = new ArrayList<>();
		fillLists();
		
	}
	
	private void fillLists() {
		fillKinds();
		fillPlaces();
	}
	
	public String writeSQL() {
		String sb="";
		
		sb += writeSQLforKinds() + "\n\n";
		sb += writeSQLforPlaces() + "\n\n";
		sb += writeSQLforCharacterAndAssoc();
		
		return sb;
	}
	
	private void fillKinds() {
		for(Character c : ponies) {
			for(String k : c.getKind()) {
				if(!kinds.contains(k)) {
					kinds.add(k);
				}
			}
		}
	}
	
	private void fillPlaces() {
		for(Character c : ponies) {
			for(String p : c.getResidence()) {
				if(!kinds.contains(p)) {
					places.add(p);
				}
			}
		}
	}
	
	
	private String writeSQLforKinds() {
		String sb="";
		int i = 1;
		for(String k : this.kinds) {
			sb += "INSERT INTO ponies_kind (id, name) VALUES (" + i + ",`" + k.toString() +"`);\n";
			System.out.println("Writting SQL for " + k.toString());
			i++;
		}
		System.out.println("===== kind SQL Finished =====");
		sb+="\n\n";
		return sb;
	}
	
	private String writeSQLforPlaces() {
		String sb="";
		int i = 1;
		for(String p : this.places) {
			sb += "INSERT INTO ponies_place (id, name) VALUES (" + i + ",`" + p.toString() +"`);\n";
			System.out.println("Writting SQL for " + p.toString());
			i++;
		}
		System.out.println("===== Places SQL Finished =====");
		sb+="\n\n";
		return sb;
	}
	
	
	private String writeSQLforCharacterAndAssoc() {
		String sb="";
		int ci = 1;
		
		for(Character c : ponies) {
			
			if(!characterNameList.contains(c.getName())) {
				//Character Creation
				sb += "INSERT INTO ponies_character (id, name, description, image) VALUES ("+
				ci+",`"+
				c.getName()+"`,`"+
				c.getDescription()+"`,`"+
				c.getImage().toString()+"`); \n";
				
				
				//Assoc Character Place
				for(String r : c.getResidence()) {
					sb += "INSERT INTO ponies_AssocCharacterPlace (Character_id, Place_id) VALUES (" + ci +"," + places.indexOf(r)+");\n";
				}
				
				//Assoc Character Kind
				for(String k : c.getKind()) {
					sb += "INSERT INTO ponies_AssocCharacterKind (Character_id, Kind_id) VALUES (" + ci + "," + kinds.indexOf(k)+");\n";
				}
				
				characterNameList.add(c.getName());
				
				System.out.println("Writting SQL for " + c.getName());
				ci++;
				sb += "\n";
			}

		}
		
		System.out.println("===== Character & Assoc SQL Finished =====");
		
		return sb;
	}
	
	
}
