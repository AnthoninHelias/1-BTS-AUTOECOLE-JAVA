public class Personne {
    private String nom;
    private String prenom;
    private String telport;

    public String getNom() {
        return nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public String getTelport() {
        return telport;
    }

    public Personne(String nom, String prenom, String telport) {
        this.nom = nom;
        this.prenom = prenom;
        this.telport = telport;
    }
}
