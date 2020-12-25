```shell
declare -A dict
while IFS= read -r line
do
    dd=$(echo $line | cut -d'[' -f2 | cut -d']' -f1 | cut -d':' -f1)
    st=$(echo $line | cut -d'"' -f3 | cut -d' ' -f2 | cut -c1)
    if [[ -v dict[$dd] ]]; then
        if [ $st == '4' ]; then
            dict[$dd]=$(( dict[$dd] + 1))
        fi
    else
        if [ $st == '4' ]; then
            dict[$dd]=1
        fi
    fi
```
