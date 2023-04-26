public class PrestationVisite {
    private TypePrestation leTypePrestation;
    private int nombreActes;

    public TypePrestation getLeTypePrestation() {
        return leTypePrestation;
    }

    public int getNombreActes() {
        return nombreActes;
    }

    public PrestationVisite(TypePrestation leTypePrestation, int nombreActes) {
        this.leTypePrestation = leTypePrestation;
        this.nombreActes = nombreActes;
    }
}
