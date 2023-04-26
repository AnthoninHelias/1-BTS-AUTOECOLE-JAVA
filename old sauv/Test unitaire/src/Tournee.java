import java.util.ArrayList;
import java.util.Date;

public class Tournee {
    private Date date;
    private ArrayList<Visite>;
    private int kmRealise;
    private Inseminateur leInseminateur;
public void
    public void setDate(Date date) {
        this.date = date;
    }

    public void setKmRealise(int kmRealise) {
        this.kmRealise = kmRealise;
    }

    public Date getDate() {
        return date;
    }

    public int getKmRealise() {
        return kmRealise;
    }

    public Inseminateur getLeInseminateur() {
        return leInseminateur;
    }

    public Tournee(Date date, int kmRealise, Inseminateur leInseminateur) {
        this.date = date;
        this.kmRealise = kmRealise;
        this.leInseminateur = leInseminateur;
    }

    public void ajouterVisite
}
