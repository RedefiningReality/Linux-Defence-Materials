# Printing Tricks
*aka Useful Commands for Working with Output*

- `… | grep [contents]` or `grep [contents] [file]` ⇒ only show lines with `[contents]`
  - `-v [contents]` ⇒ only show lines *without* `[contents]`
  - `\|` in `[contents]` is an or
  - `-E` or `egrep` allows regex in `[contents]`
    - `|` can be used without backslash
    - `^[start]` ⇒ only show lines that start with `[start]`
    - `[end]$` ⇒ only show lines that end with `[end]`
  - `-i` ⇒ ignore case
- `grep -Horn [dir]` ⇒ recursively search `[dir]` for files containing `[contents]`
  - `-Hrn` (without the `o`) ⇒ display text surrounding `[contents]` as well as filename
---
- `… | cut -d [delimiter] -f [field]` ⇒ get `[field]` field from each line after cutting it with `[delimiter]`
- `… | uniq` ⇒ unique (only display duplicate lines once)
- `… | base64 -d` ⇒ base-64 decode output
- `… | more` or `… | less` ⇒ scrollable output
- `… | tee [file]` ⇒ both print to standard output and write to `[file]`
  - `-a` ⇒ append instead of overwriting
---
- `… | tr [original] [new]` ⇒ replace corresponding character in `[original]` with character in same position in new `[new]`
  - ex. `… | tr [a-z] [A-Z]` ⇒ make text uppercase
- `… | tr -d [chars]` ⇒ delete all instances of every character in `[chars]`
- `… | tr -s [chars]` ⇒ (squash) remove repeats for each character in `[chars]`
  - ex. `… | tr -s " " | cut -d " " -f [field]` ⇒ get `[field]` but account for contiguous spaces
---
- `… | sed 's/[original]/[new]/g'` or `sed 's/[original]/[new]/g' [file]` ⇒ replace all `[original]` with `[new]` in output
- `sed -i 's/[original]/[new]/g' [file]` ⇒ replace all `[original]` with `[new]` in `[file]`
---
https://www.geeksforgeeks.org/input-output-redirection-in-linux/
