import static org.junit.jupiter.api.Assertions.*;

class ConsommateurTest {
    private Consommateur momConso;
    private Consommateur monConso1;
    private Consommateur monConso2;

    @org.junit.jupiter.api.BeforeEach
    void setUp() {
        momConso = new Consommateur("Azerty", 0);
        monConso1 = new Consommateur("qwerty", 0);
        monConso2 = new Consommateur("pascal",0);
    }

    @org.junit.jupiter.api.Test
    void calculerPointsFidelite() {
        momConso.CalculerPointsFidelite(1, 54);
        assertEquals(1,momConso.getPointsFidelite());
        //programe1
        momConso.CalculerPointsFidelite(1, 100);
        assertEquals(2,momConso.getPointsFidelite());

        monConso1.CalculerPointsFidelite(2, 54);
        assertEquals(54, monConso1.getPointsFidelite());
        monConso1.CalculerPointsFidelite(2, 100);
        assertEquals(154, monConso1.getPointsFidelite());

        monConso2.CalculerPointsFidelite(3, 50);

        monConso2.CalculerPointsFidelite(3, 150);

        monConso2.CalculerPointsFidelite(3, 250);

        monConso2.CalculerPointsFidelite(3,550);










    }
}