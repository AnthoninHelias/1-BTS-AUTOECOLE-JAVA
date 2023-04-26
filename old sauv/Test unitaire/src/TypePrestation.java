public class TypePrestation {
    private float prixForfaitaire;
    private String lebelle;

    public float getPrixForfaitaire() {
        return prixForfaitaire;
    }

    public String getLebelle() {
        return lebelle;
    }

    public TypePrestation(float prixForfaitaire, String lebelle) {
        this.prixForfaitaire = prixForfaitaire;
        this.lebelle = lebelle;
    }
}
