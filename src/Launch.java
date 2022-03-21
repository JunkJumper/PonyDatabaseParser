import java.io.IOException;
import java.util.List;

import ponies.CharacterManager;
import ponies.Character;


public class Launch {

	public static void main(String[] args) throws IOException {
		List<Character> ponies = CharacterManager.createCharacters();
		System.out.println(ponies);
	}
}