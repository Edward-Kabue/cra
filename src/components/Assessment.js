import React from 'react';

const Assesment = ({ questions }) => {
  return (
    <section className='w-full grid grid-cols-1 lg:grid-cols-2 gap-8 md:gap-4'>
      {questions.map((question, i) => {
        return <h1 key={i} question={question} />;
      })}
    </section>
  );
};

export default Assesment;
