public class Adherant {
    private String latitude;
    private String longitude;
    private String nom;
    private String prenom;
    private String telport;

    public String getLatitude() {
        return latitude;
    }

    public String getLongitude() {
        return longitude;
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

    public Adherant(String latitude, String longitude, String nom, String prenom, String telport) {
        this.latitude = latitude;
        this.longitude = longitude;
        this.nom = nom;
        this.prenom = prenom;
        this.telport = telport;
    }
}
