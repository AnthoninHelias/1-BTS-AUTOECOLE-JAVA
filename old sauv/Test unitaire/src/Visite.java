import java.util.ArrayList;

public class Visite {
private Adherant leAdherant;
 private ArrayList<PrestationVisite> lesPrestationsVisite;
private String heure;

    public Adherant getLeAdherant() {
        return leAdherant;
    }

    public ArrayList<PrestationVisite> getLesPrestationsVisite() {
        return lesPrestationsVisite;
    }

    public String getHeure() {
        return heure;
    }

    public Visite(Adherant leAdherant, String heure) {
        this.leAdherant = leAdherant;
        this.heure = heure;
        this.lesPrestationsVisite = new ArrayList<>();
    }

    public void ajouterPrestationVisite(TypePrestation presta, int unNombreActes){
        PrestationVisite pv= new PrestationVisite(presta, unNombreActes);
        this.lesPrestationsVisite.add(pv);
    }

    public float montantAfacturer()
        float montant = 0;
    for (PrestationVisite pv : this.lesPrestationVisite)
    {
        montant += pv.getNombreActes() * pv.getLeTypePrestation().getPrixForfaitaire();
    }
    return montant;


}
