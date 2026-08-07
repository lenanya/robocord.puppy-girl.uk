for d in */; do echo -e "$(find "$d" -mindepth 1 -maxdepth 1 | wc -l)\t$d"; done | sort -nr
