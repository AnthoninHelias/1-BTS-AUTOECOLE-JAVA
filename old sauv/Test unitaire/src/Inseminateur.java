public class Inseminateur {
    private  String login;
    private String password;

    private String nom;
    private String prenom;
    private String telport;

    public String getLogin() {
        return login;
    }

    public String getPassword() {
        return password;
    }

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getTelport() {
        return telport;
    }

    public Inseminateur(String login, String password, String nom, String prenom, String telport) {
        this.login = login;
        this.password = password;
        this.nom = nom;
        this.prenom = prenom;
        this.telport = telport;
    }
}

