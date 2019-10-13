Visos funkcijos yra kviečiamos su (3, 2.2, '1') parametrais.

1) Kviečiant pirmąją 'calculateHomeWorkSum' funkciją gaunamas rezultatas yra 6.2,
nes funkcija neturi specifinių reikalavimų argumentams ar funkcijos gražinamo rezultato tipui. 
2) Kviečiant antrąją 'calculateHomeWorkSum' funkciją, ( Nfq\Akademija\NotTyped namespace ),
rezultatas - 6. Todėl, nes yra nurodytas funkcijos grąžinamo rezultato tipas (int), kuris sumą (6.2) suapvaliną iki 6.
3) Kviečiant trečiąją 'calculateHomeWorkSum' funkciją, ( Nfq\Akademija\soft namespace ),
rezultatas - 6. Funkcija reikalauja int parametrų, bet gaudama float ir string, juos pasiverčia į int tipo kintamuosius,
t.y. (3, 2, 1) ir sudėjus gauna 6.
4) Kviečiant ketvirtąją funkciją 'calculateHomeWorkSum',( Nfq\Akademija\strict namespace ),
išmetamas TypeError, nes 'strict_types=1' neleidžia pakeisti duodamo parametro tipo, kad jis atitiktų argumento prašomą 
tipą.(Funkciją iškviečiau jos aprašymo faile, nes iškviečiant 'Strict' funkciją index.php, būtų reikėję jame deklaruoti 'strict_types=1', 
kas būtų darę itaką 'Soft' funkcijai.)