<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Super strona</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async
          src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
  </script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="center">
  <h1>Artykuły</h1>
</div>
<div class="pozycja">
<ul>
    <li><a href="../test/index.php">Strona główna</a></li>
  </ul>
</div>
<div class="margines">
  <h2>W tej sekcji znajdziesz artykuły na najróżniejsze tematy z zakresu matematyki i fizyki</h2>
  <p>
  <div class="autor">
  Funkcje sinusoidalne 
  </div>
  Niech \(f(x,t)\) oznacza wychylenie dowolnego punktu o współrzędnej \(x\) w czasie \(t\). Dla fali rozchodzącej się 
  w kierunku \(+x\) z szybkością \(v\) prawdziwa jest równość \(f(x,t)=f(x-v \Delta t, t - \Delta t)\). Jest tak dlatego, 
  że przyjmujemy, że fala to zaburzenie zachowujące swój kształt - cofając czas o \(\Delta t\) widzimy jak pewien 
  konkretny punkt przemieszcza się do wstecz osi \(x\) do miejsca o współrzędnej \(x-v\Delta t\). Jeśli \(\Delta t=t\), 
  otrzymujemy \(f(x,t)=f(x-vt,0)\) (cofnęliśmy się do momentu włączenia zegarka). Niech kształt fali w chwili \(t=0\) 
  opisany będzie przez funkcję \(g(x)\), tj. \(f(x,0)=g(x)\). Stąd \(g(x-vt)=f(x-vt,0)=f(x,t)\). Zatem otrzymujemy:
$$f(x,t)=g(x-vt).$$ Jest to bardzo istotny wniosek - \(f(x,t)\) zależy co prawda od \(x\) i \(t\), ale nie jest to
 zależność dowolna, a mianowicie mająca postać \(x-vt\). Specyficznym rodzajem fal są fale, w których funkcja \(g\) jest 
 funkcją sinus. Mamy wówczas $$f(x,t)=g(x-vt)=A \sin{[k(x-vt)+\phi]}.$$ Niech \(k=\frac{2 \pi}{\lambda}\) (liczba falowa). 
Wobec tego okres wyraża się poprzez \(T=\frac{\lambda}{v}=\frac{2\pi}{kv}\), więc \(k=\frac{2\pi}{Tv}\); dodatkowo 
\(\omega=\frac{2 \pi}{T}\). Równanie fali przyjmuje postać: $$f(x,t)=A\sin{(kx-kvt+\phi)}=A \sin(kx-\omega t+\phi).$$
Zmieniając wartość fazy początkowej \(\phi\) (czy raczej wybierając jakiś inny, bardziej czy mniej stosowny moment 
na włączenie zegarka) otrzymać możemy inne wzory na kształt fali sinusoidalnej. 
</p>
</div>
</body>
</html>