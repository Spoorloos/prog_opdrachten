for (
    let n1 = 0, n2 = 1;
    n1 < 10000000;
    [ n1, n2 ] = [ n2, n1 + n2 ]
) {
    console.log(n1);
}