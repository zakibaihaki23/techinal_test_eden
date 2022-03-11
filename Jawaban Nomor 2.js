var data = [
  {
    type: "Foo",
    year: 1995,
  },
  {
    type: "Bar",
    year: 1993,
  },
  {
    type: "Foobar",
    year: 2020,
  },
];

data.sort((a, b) => Number(a.year) - Number(b.year));
