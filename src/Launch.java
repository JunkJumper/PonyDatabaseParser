import java.io.IOException;

import urls.Url;
import urls.UrlManager;

public class Launch {

	public static void main(String[] args) throws IOException {
		for (Url u : UrlManager.getAllUrl()) {
			System.out.println(u.toString());
		}
	}
}
